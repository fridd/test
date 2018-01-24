<style>
    form{
        text-align: center;
        margin-top: 30px;
    }
</style>
<form action="{{url('/student')}}" method="POST">
{{csrf_field()}}

    学号：<input type="text" name="username_id" value="" placeholder="学号"><br>
    姓名：<input type="text" name="name" value="" placeholder="姓名"><br>
    性别：<input type="text" name="sex" value="" placeholder="性别"><br>
    舞蹈：<input type="text" name="dance" value="" placeholder="舞蹈"><br>
    音乐：<input type="text" name="music" value="" placeholder="音乐"><br>
    美术：<input type="text" name="art" value="" placeholder="美术"><br>
    外语：<input type="text" name="english" value="" placeholder="英语"><br>
    运动：<input type="text" name="sport" value="" placeholder="运动"><br>
    爱好：<input type="text" name="hobby" value="" placeholder="爱好"><br>
    特长：<input type="text" name="skill" value="" placeholder="特长"><br>
    <input type="submit" value="提交">
</form>