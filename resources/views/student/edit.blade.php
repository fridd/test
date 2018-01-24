<style>
    input{
        text-align: center;
    }
</style>

<form action="{{url('/student/'.$val->id)}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="put"/>
    学号：<input type="text" name="username_id" value="{{$val->username_id}}" placeholder="学号">
    <br>
    名字：<input type="text" name="name" value="{{$val->name}}" placeholder="名字">
    <br>
    性别：<input type="text" name="sex" value="{{$val->sex}}" placeholder="性别">    <br>

    舞蹈：<input type="text" name="dance" value="{{$val->dance}}" placeholder="舞蹈">    <br>

    音乐：<input type="text" name="music" value="{{$val->music}}" placeholder="音乐">    <br>

    美术：<input type="text" name="art" value="{{$val->art}}" placeholder="美术">    <br>

    外语：<input type="text" name="english" value="{{$val->english}}" placeholder="弗恩英语">    <br>

    运动：<input type="text" name="sport" value="{{$val->sport}}" placeholder="运动">    <br>

    爱好：<input type="text" name="hobby" value="{{$val->hobby}}" placeholder="爱好">    <br>

    特长：<input type="text" name="skill" value="{{$val->skill}}" placeholder="特长">    <br>

    <input type="submit" value="提交">

</form>