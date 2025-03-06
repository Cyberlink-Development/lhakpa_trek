<?php

namespace App\Http\ViewComposers;

use App\Models\Posts\PostModel;
use App\Models\Settings\SettingModel;
use App\Models\Travels\TripModel;
use App\Models\Posts\PostTypeModel;
use Illuminate\Contracts\View\view;
use App\Models\Travels\ActivityModel;
use App\Models\Travels\TripGroupModel;
use App\Models\Destinations\DestinationModel;

class HeaderComposer
{

	public function __construct()
	{
		// Dependencies automatically resolved by service container...
	}

	public function compose(View $view)
	{

		$view->with('navigations', PostTypeModel::where(['is_menu' => '1'])
			->orderBy('ordering', 'asc')
			->get());
		$view->with('destinations',DestinationModel::orderBy('ordering','asc')->get());
		$view->with('expedition', ActivityModel::where('activity_parent','expedition')->orderBy('ordering','asc')->get());
		$view->with('exp_8000ers', ActivityModel::find(42)->trips()->where('status','1')->orderBy('ordering','asc')->get());
		$view->with('exp_7000ers', ActivityModel::find(43)->trips()->where('status','1')->orderBy('ordering','asc')->get());
		$view->with('exp_6000ers', ActivityModel::find(47)->trips()->where('status','1')->orderBy('ordering','asc')->get());
		$view->with('trekking',ActivityModel::where('activity_parent','trekking')->orderBy('ordering','asc')->get());
		$view->with('travels',ActivityModel::where('activity_parent','travel')->orderBy('ordering','asc')->get());
		$view->with('random_tour', TripModel::where('status','1')->inRandomOrder()->first());
		$view->with('activity', ActivityModel::where('activity_parent','activity')->whereNotIn('id', [58, 59])->orderBy('ordering','asc')->get());
		$view->with('random', ActivityModel::where('activity_parent','trekking')->inRandomOrder()->get());   
        $view->with('contact_us', PostTypeModel::where(['is_menu' => '1'])->where(['id' => '26'])->first());
		$view->with('useful_info', PostModel::where(['post_type' => '24', 'status' => '1'])->orderBy('post_order', 'asc')->get());
        $view->with('your_group', PostTypeModel::where(['is_menu' => '0'])->where(['id' => '29'])->first());
        $view->with('news', PostTypeModel::where(['is_menu' => '1'])->where(['id' => '32'])->first());
        $view->with('women', PostTypeModel::where(['is_menu' => '1'])->where(['id' => '33'])->first());
        $view->with('tourism', PostTypeModel::where(['is_menu' => '1'])->where(['id' => '34'])->first());
        $view->with('plan_trip', PostTypeModel::where(['is_menu' => '1'])->where(['id' => '35'])->first());
        $view->with('setting',SettingModel::where('id',1)->first());
	}
}
