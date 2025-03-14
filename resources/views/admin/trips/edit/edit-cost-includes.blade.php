<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Holiday</span>
            <a class="btn btn-primary pull-right add-testimonial" data-added="0"> <i class="glyphicon glyphicon-plus"></i> Add Row </a>
        </div>

        <div class="panel-body" id="row_testimonial_body">

            {{-- <div class="row">
                <div class="col-md-1"><label>Ordering</label></div>
                <div class="col-md-10"><label>Title</label></div>
                
            </div> --}}

            @if ($costincludes->count() > 0)
                @foreach ($costincludes as $row)
                    <div class="row" id="testimonial-rec-{{ $loop->iteration }}">
                        <input type="hidden" name="testimonial_id[]" value="{{ $row->id }}" />
                        <div class="row">
                            <div class="col-md-1"><label>Ordering</label></div>
                            <div class="col-md-10"><label>Title</label></div>
                        </div> 
                        <div class="col-md-1">
                            <input type="number" min="1" max="2000" name="testimonial_ordering[]" value="{{ $row->ordering }}" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="testimonial_title[]" value="{{ $row->title }}" class="form-control" placeholder="" />
                        </div>
                        <div class="col-md-10"><label>Content</label></div>
                        <div class="col-md-10">
                            <textarea class="my-editor form-control" name="testimonial_content[]" value="{{ $row->content }}" placeholder="">{{ $row->content }}</textarea>
                        </div>
                     
                        <button class="btn btn-danger delete-testimonial" testimonial-rowid="{{ $row->id }}"
                            testimonial-data-id="{{ $loop->iteration }}"><i
                                class="glyphicon glyphicon-trash"></i></button>

                    </div>
                @endforeach
            @endif
        </div>

        <div style="display:none;">
            <div id="row_testimonial_additional">
                <div class="row">
                    <input type="hidden" name="testimonial_id[]" value="" />
                    {{-- <div class="col-md-1"><input type="number" min="1" max="2000" name="testimonial_ordering[]" class="form-control" placeholder="" /></div>
                    <div class="col-md-10"><input type="text" name="testimonial_title[]" class="form-control" placeholder="" /></div> --}}
                    <div class="col-md-12">
                        <div class="col-md-1"><label>Ordering</label></div>
                        <div class="col-md-10"><label>Title</label></div>
                    </div> 
                    <div class="col-md-1">
                        <input type="number" min="1" max="2000" name="testimonial_ordering[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="testimonial_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10"><label>Content</label></div>
                    <div class="col-md-10">
                        <textarea class="form-control" name="testimonial_content[]" placeholder=""></textarea>
                    </div>
                  
                    <div class="col-md-1"><button class="btn btn-danger delete-testimonial" testimonial-data-id="0"><i class="glyphicon glyphicon-trash"></i></button></div>
                </div>
            </div>
        </div>


    </div>


</div>
