<?php
return [
    'nextActive' => '<li class="btn btn-sm  next"><a rel="next" href="{{url}}">{{text}}</a></li>',
    'nextDisabled' => '<li class="btn btn-sm btn-disabled next"><a href="" onclick="return false;">{{text}}</a></li>',
    'prevActive' => '<li class="btn btn-sm prev"><a rel="prev" href="{{url}}">{{text}}</a></li>',
    'prevDisabled' => '<li class="btn btn-sm btn-disabled prev "><a href="" onclick="return false;">{{text}}</a></li>',
    'counterRange' => '{{start}} - {{end}} of {{count}}',
    'counterPages' => '{{page}} of {{pages}}',
    'first' => '<li class="btn first"><a href="{{url}}">{{text}}</a></li>',
    'last' => '<li class="btn last"><a href="{{url}}">{{text}}</a></li>',
    'number' => '<li><a href="{{url}}">{{text}}</a></li>',
    'current' => '<li class="btn active"><a href="">{{text}}</a></li>',
    'ellipsis' => '<li class="btn ellipsis">&hellip;</li>',
    'sort' => '<a href="{{url}}">{{text}}</a>',
    'sortAsc' => '<a class="asc" href="{{url}}">{{text}}</a>',
    'sortDesc' => '<a class="desc" href="{{url}}">{{text}}</a>',
    'sortAscLocked' => '<a class="asc locked" href="{{url}}">{{text}}</a>',
    'sortDescLocked' => '<a class="desc locked" href="{{url}}">{{text}}</a>',
];
