<style>
    table{
        width: 900px;
        height: auto;
        cellpadding:100px;
        margin:0 auto;
        text-align: center;
        border-collapse:collapse;
        margin-top: 30px;
    }
    table tr td{

        border: 1px solid blue;
        padding:0px;
    }
    a{
        left: 400px;
    }
    input{
        text-align: center;
    }

</style>
<table>
    <tr>
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
    <tr>
        <td width="30">ID</td>
        <td width="70">{{$val->username_id}}</td>
        <td width="70">{{$val->name}}</td>
        <td width="50">{{$val->sex}}</td>
        <td width="80">{{$val->dance}}</td>
        <td width="80">{{$val->music}}</td>
        <td width="80">{{$val->art}}</td>
        <td width="80">{{$val->english}}</td>
        <td width="80">{{$val->sport}}</td>
        <td width="100">{{$val->hobby}}</td>
        <td width="60">{{$val->skill}}</td>
        <td><form action="{{url('/student/'.$val->id)}}" method="POST">
                <input type="hidden" name="_method" value="delete"/>
                {{csrf_field()}}
                <input type="submit" name="" value="删除"/>
            </form></td>
    </tr>
</table>
