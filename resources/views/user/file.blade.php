
<form role="form" method="post" action="{{URL::to('store')}}" enctype="multipart/form-data">
  @csrf
    <div class="form-group" style="padding-bottom: 15px">
         <label class="col-lg-3">Upload</label>
         <input class="btn btn-primary" multiple  type="file" name="files[]" > <br/>
         <input type="text" name="name" value="">
         <input type="submit" name="btn" value="upload">
    </div>
</form>
