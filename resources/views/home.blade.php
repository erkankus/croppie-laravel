<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='stylesheet' href="{{ asset('css/bootstrap.min.css') }}">
        <link rel='stylesheet' href="{{ asset('css/croppie.css') }}">
        <link rel='stylesheet' href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <label class="cabinet center-block" style="width: 100px; height: 130px;">
                        <figure>
                            <img src="" class="gambar img-responsive img-thumbnail" id="item-img-output"/>
                            <figcaption><i class="fa fa-camera"></i></figcaption>
                        </figure>
                        <form action="/" method="POST" enctype="multipart/form-data">
                            <input type="file" class="item-img file center-block" name="file_photo"/>
                            <input type="hidden" class="profile-photo" name="profile_photo"/>
                            <br>
                            <br>
                            <input type="submit" name="save" value="Save" class="profile-photo-btn hidden"/>
                        </form>
                    </label>
                </div>
            </div>
        </div>

        <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">
                           Edit Photo
                        </h4>
                    </div>
                    <div class="modal-body">
                        <div id="upload-demo" class="center-block"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/croppie.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
