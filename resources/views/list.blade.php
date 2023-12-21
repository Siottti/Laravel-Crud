<h1>Hello World</h1>


<table style="width: 100%; text-align: center" border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
    </tr>
@foreach($data as $value)
<tr>
    <td>{{$value->id}}</td>
    <td>{{$value->fname}}</td>
    <td>{{$value->email}}</td>
</tr>
@endforeach
</table>