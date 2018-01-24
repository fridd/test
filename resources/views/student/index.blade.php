<style>
    table{
        width: 900px;
        height: auto;
        cellpadding:100px;
        margin:0 auto;
        text-align: center;
        border-collapse:collapse;
    }
   table tr td{

        border: 1px solid blue;
        padding:0px;
    }
    a{
        left: 400px;
    }

</style>

<table>
    <a href="{{url('student/create')}}">添加</a>
    <tr >
        <td width="30">ID</td>
        <td width="70">学号</td>
        <td width="70">姓名</td>
        <td width="50">性别</td>
        <td width="80">舞蹈</td>
        <td width="80">音乐</td>
        <td width="80">美术</td>
        <td width="80">英语</td>
        <td width="80">运动</td>
        <td width="100">爱好</td>
        <td width="60">特长</td>
        <td width="70">操作</td>
    </tr>
    @foreach($all as $element )
    <tr>
        <td>{{$element->id}}</td>
        <td>{{$element->username_id}}</td>
        <td>{{$element->name}}</td>
        <td>{{$element->sex}}</td>
        <td>{{$element->dance}}</td>
        <td>{{$element->music}}</td>
        <td>{{$element->art}}</td>
        <td>{{$element->english}}</td>
        <td>{{$element->sport}}</td>
        <td>{{$element->hobby}}</td>
        <td>{{$element->skill}}</td>
        <td><a href="{{'student/'.$element->id.'/edit'}}">编辑</a>/<a href="{{'student/'.$element->id}}">查看</a></td>
    </tr>
        @endforeach
</table>