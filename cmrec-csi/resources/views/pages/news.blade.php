@extends('layouts.app')
@section('content')
<section class="text-center;">
    <div class="container">
        <div class="row">
            <div class="column">&nbsp;</div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="list-group">

                    <div class="container" align=center>
                        <table style="border:1px solid #CCC;width:80%;margin-top:20px;" cellpadding=0 cellspacing=0
                            class="table responsive table-hover">
                            <tr style="background:#002060 !important;">
                                <td colspan=3 class="text-center">
                                    <p class="list-group-item list-group-item-action active"
                                        style="background:#002060;!important;border:#dc143c !important">
                                        <h4 style="font-size:20px;color:white;"> LATEST NEWS</h4>
                                </p></td>
                            </tr>
                            <tr>
                                <th class="text-center">S. No.</th>
                                <th class="text-center">News Headline</th>
                                <th class="text-center">Date</th>
                            </tr>
                            @if(count($all_news)>0)
                            @php $sno=1; @endphp
                            @foreach ($all_news as $news)
                            <tr>
                                <td width="10%" class="text-center">{{$sno}}</td>
                                <td width="65%" class="text-center"><a target=_blank href="/event/{{$news->id}}">{{$news->title}}</a></td>
                                <td width="25%" style="text-align:right" class="text-center">{{$news->start_date}}</td>
                            </tr>
                            @endforeach
                            @else
                            <tr><th class="text-center" colspan="3">No Updates</th></tr>
                            @endif
                        </table>
                    </div>

                </div>

            </div>
        </div>
</section>
@endsection