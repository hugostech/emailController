<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ExtremePC</title>
</head>
<body>
    <h3>
        <span class="s1"><b><span style="font-size:18px;">Dear {{isset($name)?$name:'Customer'}},</span></b><span style="font-size:18px;">&nbsp;</span></span>
    </h3>

    {!! $email_content !!}


    <h3>
        <span class="s1" style="font-size:18px;"><b>ExtremePC Team</b></span>
    </h3>
    <p class="p3">
        <span class="s2"><span style="font-size:14px;">Email: </span><a href="mailto:sales@roctech.co.nz"><span class="s3" style="font-size:14px;">sales@roctech.co.nz</span></a></span>
    </p>
    <p class="p4">
        <span class="s4" style="font-size:14px;">Phone:&nbsp;</span><span class="s1" style="font-size:14px;">09 849 4888</span>
    </p>
    <p class="p4">
        <span class="s1" style="font-size:14px;">Address: Shop A2, St Lukes Mega Centre</span><span class="s4"><br />
</span><span class="s1" style="font-size:14px;">1 Wagner Place, St Lukes, Auckland</span>
    </p>

</body>
</html>