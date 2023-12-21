<h1>Hello World!</h1>


<table style="width: 100%; text-align: center" border="1">
    <tr>
    <th>ID</th>
    <th>Firstname</th>
    <th>Middle Name</th>
    <th>Last Name</th>
    </tr>
 @foreach($data as $list)
<tr>
    <td>{{$list->id}}</td>
    <td>{{$list->fname}}</td>
    <td>{{$list->mname}}</td>
    <td>{{$list->lname}}</td>
</tr>
 @endforeach
</table>


