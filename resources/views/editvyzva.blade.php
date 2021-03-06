@include('includes.head', ['title' => 'Úprava výzvy'])

<body>

@include('includes.nav')

<div class="first-widget parallax" style="visibility: hidden;">


</div> <!-- /.pageTitle -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="comment-form">
                <div class="widget-inner">
                    <form action="{{url('editvyzva')}}" method="post" enctype="multipart/form-data">
                        <h2>Úprava výzvy</h2>
                        <br>
                        <div>
                            <input type="hidden" id="id" name="id" class="form-control" value="{{$vyzva->idvyzvy}}">
                        </div>
                        <div>
                            <label for="nazov">Názov výzvy:</label></br>
                            <input type="text" id="nazov" name="nazov" class="form-control" required
                                   value="{{$vyzva->nazov}}">
                        </div>
                        <br>
                        <div>
                            <label for="popis">Krátky popis:</label>
                            <textarea name="popis" id="popis" rows="2" class="form-control"
                                      required>{{$vyzva->popis}}</textarea>
                        </div>
                        <br>
                        <div>
                            <label for="ostatneinfo">Detaily k výzve:</label>
                            <textarea name="ostatneinfo" id="ostatneinfo" rows="5" class="form-control"
                                      required>{{$vyzva->ostatneinfo}}</textarea>
                        </div>
                        <br>
                        <div>
                            <label for="dlzka">Dĺžka výzvy:</label></br>
                            <input type="text" id="dlzka" name="dlzka" class="form-control" value="{{$vyzva->dlzka}}"
                                   required>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        </div>
                        <br>
                        <div>
                            <label for="platnedo">Platnosť výzvy do:</label></br>
                            <input type="date" id="platnedo" name="platnedo" class="form-control" required
                                   value="{{$vyzva->platnedo}}">
                        </div>
                        <br>
                        <div>
                            <label for="filename">Foto:</label></br>
                            <input type="file" name="filename" id="filename" class="form-control">
                        </div>
                        <br>
                        <div>
                            <label for="oblast">Oblasť:</label></br>
                            <select class="form-control" id="oblast" name="oblast" required>
                                @foreach ($oblasti as $oblast)
                                    @if($vyzva->oblasti->idoblasti === $oblast->idoblasti)
                                        <option value="{{ $oblast->idoblasti }}" selected>{{ $oblast->nazov }}</option>
                                    @else
                                        <option value="{{ $oblast->idoblasti }}">{{ $oblast->nazov }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="typvyzvy">Typ výzvy:</label></br>
                            <select class="form-control" id="typvyzvy" name="typvyzvy" required>
                                @foreach ($typvyzvy as $typ)
                                    @if($vyzva->typvyzvy->idtypvyzvy === $typ->idtypvyzvy)
                                        <option value="{{ $typ->idtypvyzvy }}" selected>{{ $typ->typ }}</option>
                                    @else
                                        <option value="{{ $typ->idtypvyzvy }}">{{ $typ->typ }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div>
                            <label for="univerzity">Univerzity:</label></br>
                            <select class="form-control" id="univerzity" name="univerzity[]" multiple required>
                                @foreach ($univerzity as $uni)
                                    @foreach($univerzity_has_vyzvy as $univerzita_has_vyzva)
                                        @if($univerzita_has_vyzva->univerzity_iduniverzity === $uni->iduniverzity)
                                            <option value="{{ $uni->iduniverzity }}" selected>{{ $uni->nazov }}</option>
                                        @endif
                                    @endforeach
                                        <option value="{{ $uni->iduniverzity }}">{{ $uni->nazov }}</option>
                                @endforeach
                            </select>
                        </div>
                        </br>
                        <div>
                            <input class="mainBtn" type="submit" name="submit" value="Upraviť výzvu" id="submit">
                        </div>
                    </form>
                </div> <!-- /.widget-inner -->
            </div> <!-- /.widget-main -->
        </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->
</div> <!-- /.container -->

<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");
        $(".vyzvy").addClass("active");
    });
</script>
{{--<script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script>
    tinymce.init({
        selector:'textarea.ostatneinfo',
        height: 300
    });
</script>--}}
<script>
    CKEDITOR.replace('ostatneinfo');
    var usedNames = {};
    $("select[name='univerzity\[\]'] > option").each(function () {
        if(usedNames[this.text]) {
            $(this).remove();
        } else {
            usedNames[this.text] = this.value;
        }
    });
</script>
@include('includes.foot')

<!-- Scripts -->
<script src="js/min/plugins.min.js"></script>
<script src="js/min/medigo-custom.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

</body>
</html>