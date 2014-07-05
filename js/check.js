function isNumberOrLetter(s)//判断是否是数字或字母,用于验证用户名，失去焦点验证。
            {
           var regu = "^[0-9a-zA-Z]{4,16}$";
           var re = new RegExp(regu);
           if (!re.test(s))
           {
           document.getElementById ("userInf").innerHTML="用户名格式不对！";
           document.getElementById ("userInf").style.color="red";
          
           }
           else
           {
           document.getElementById ("userInf").innerHTML="用户名通过！";
           document.getElementById ("userInf").style.color="green";
            document.getElementById ("userIDCheck").innerHTML="";
           }
            }

   function validatorPassword(s)//验证规则为6到16数字、字母、下划线组成，首字母为字母，用于验证密码。
               {
                 regu="^[a-zA-Z][0-9a-zA-Z_]{5,15}$";
                 re=new RegExp(regu);
                if (!re.test(s))
                {
                   document.getElementById ("passwordInf").innerHTML="不对！";
                   document.getElementById ("passwordInf").style.color="red";
                }
                else
                {
                  document.getElementById ("passwordInf").innerHTML="通过！";
                  document.getElementById ("passwordInf").style.color="green";
                  document.getElementById ("passwordCheck").innerHTML="";
                }
//               alert("6到16个数字、下划线和英文字符,第一个必须为字母,不区分字母大小写");
               }

 
    function passwordConfirm(s)//确认密码验证
           {
             if(s.toLowerCase()!=document.getElementById ("password").value.toLowerCase())
             {
                   document.getElementById ("confirmInf").innerHTML="密码不一致！";
                   document.getElementById ("confirmInf").style.color="red";
               
             }
             else
             {
                  document.getElementById ("confirmInf").innerHTML="通过！";
                  document.getElementById ("confirmInf").style.color="green";
                  document.getElementById ("confirmCheck").innerHTML="";
             }
//              alert("两次密码输入不一致");
           }
    function displayInform(s)//注册信息规则提示信息（获得焦点验证）
    {
      if(s=="user")
      document.getElementById ("userIDCheck").innerHTML="(用户名由4-16个数字或字母组成)";
      if(s=="password")
      document.getElementById ("passwordCheck").innerHTML="(密码由6-16个数字、字母、下划线组成，首字母必须是字母,不区分大小写)";
      if(s=="passwordC")
      document.getElementById ("confirmCheck").innerHTML="(两次密码输入必须一致)";
     
     
    }
function submitValidator() //提交验证
   {
     if(document.getElementById("control").style.display=="inline")
     {
         if((document.getElementById ("user").value=="")||(document.getElementById("password").value=="")||(document.getElementById("passwordC").value=="")||(document.getElementById("answer").value=="")||(document.getElementById("question").value==""))
        {
           alert("必填项不能为空！");
            return false;
         }
         else
        {
           if((document.getElementById ("user").value).match(/^[0-9a-zA-Z]{4,16}$/)&&(document.getElementById("password").value).match(/^[a-zA-Z][0-9a-zA-Z_]{5,15}$/)&&
           (document.getElementById ("password").value.toLowerCase()==document.getElementById ("passwordC").value.toLowerCase()))
           {return true;}
           else
           {alert("输入格式不对");return false;}
         }
     }
     else
     {
        if((document.getElementById ("user").value=="")||(document.getElementById("password").value=="")||(document.getElementById("passwordC").value=="")||(document.getElementById("answer").value==""))
        {
           alert("必填项不能为空！");
            return false;
         }
         else
        {
           if((document.getElementById ("user").value).match(/^[0-9a-zA-Z]{4,16}$/)&&(document.getElementById("password").value).match(/^[a-zA-Z][0-9a-zA-Z_]{5,15}$/)&&
           (document.getElementById ("password").value.toLowerCase()==document.getElementById ("passwordC").value.toLowerCase()))
           {return true;}
           else
           {alert("输入格式不对");return false;}
         }
     }