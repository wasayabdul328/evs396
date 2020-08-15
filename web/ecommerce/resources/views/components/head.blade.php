<title>{{!empty($name)?$name : 'No Title'}}</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
@foreach ($headerCssFiles as $css)
<link href="{{asset($css)}}" type="text/css" rel="stylesheet" media="all">
@endforeach

