

<p>Hi, This is {{ $data['fullname'] }}</p>
<p>My Email is {{ $data['email'] }}.</p>
<p>{{$data['message']}}</p>
<p>I'm interesting {{route('frontpage.productdetail',[ app()->getLocale(),$data['product_id']])}}</p>

