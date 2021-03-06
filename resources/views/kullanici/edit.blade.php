@extends('anasablon')
@section('baslik','Ürün Türü Düzenle')
@section('anabaslik','Ürün Türü Düzenleme Paneli')
@section('csskodu')


@endsection
@section('icerik')




    @php
        $controller=Request::segment(1);
    @endphp

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ __('Ürün Türü Düzenle') }}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <!--KAYIT FORMU BAŞ-->
                        <form method="POST" action="{{ route($controller.'.update', $urunturleri->id) }}">
                        @csrf
                        @method('PATCH')
                        <!--BÖLÜM ADI BAŞ-->
                            <div class="form-group">
                                <label>Ürün Türü:</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-list-alt"></i></span>
                                    </div>
                                    <input type="text" name="urun_turu_adi" id="urun_turu_adi" value="{{$urunturleri->urun_turu_adi}}" class="form-control" placeholder="ÜRÜN TÜRÜNÜN ADI">
                                </div>
                            </div>
                            <!--BAYİ ADI SON-->

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <a href="../../{{ $controller }}">Tüm ürün türlerini görmek için tıklayınız</a> Lütfen istenen bilgileri eksiksiz ve doğru bir şekilde doldurunuz.
                        <button type="submit" class="btn btn-success float-right">{{__('Kaydet')}}</button>
                    </div>
                    <!-- /.card-footer -->
                </div>
                </form>
                <!-- KAYIT FORMU SON -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
@endsection

@section('javakodu')

    <!--JAVASCRİPT IMPORT BAŞ-->

    <script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

    <!--JAVASCRİPT IMPORT SON-->

    <!--AYAR KODU BAŞ-->

    <script>
        $(function () {
            $("input[data-bootstrap-switch]").each(function(){
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });
        })
    </script>
    <!--AYAR KODU SON-->
@endsection
