<div class="col-md-12">
    <div class="panel">
        <div class="panel-heading">
            <span class="panel-title">Guidelines </span>
            <a class="btn btn-primary pull-right add-guide" data-added="0"><i class="glyphicon glyphicon-plus"></i> Add Row </a>
        </div>

        <div class="panel-body" id="row_guide_body">
            <div class="row" id="guide-headingg">
                <div class="col-md-1"><label>Ordering</label>

                </div>
                <div class="col-md-10"><label>Title</label>

                </div>
                
                <div class="col-md-1">

                </div>
            </div>
            <div class="row" id="guide-rec-1">

            </div>
        </div> 

        <div style="display:none;">
            <div id="row_guide_additional">
                <div class="row">
                    {{-- <div class="col-md-1"><input type="number" min="1" max="2000" name="guide_ordering[]" class="form-control" placeholder="" /></div>
                    <div class="col-md-10"><input type="text" name="guide_title[]" class="form-control" placeholder="" /></div> --}}
                    <div class="col-md-12">
                        <div class="col-md-1"><label>Ordering</label></div>
                        <div class="col-md-10"><label>Title</label></div>
                    </div> 
                    <div class="col-md-1">
                        <input type="number" min="1" max="2000" name="guide_ordering[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10">
                        <input type="text" name="guide_title[]" class="form-control" placeholder="" />
                    </div>
                    <div class="col-md-10"><label>Content</label></div>
                    <div class="col-md-10">
                        <textarea class="form-control" name="guide_content[]" placeholder=""></textarea>
                    </div>
                  
                    <div class="col-md-1"><button class="btn btn-danger delete-guide" guide-data-id="0"><i class="glyphicon glyphicon-trash"></i></button></div>
                </div>
            </div>
        </div>


    </div>


</div>
