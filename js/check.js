function isNumberOrLetter(s)//�ж��Ƿ������ֻ���ĸ,������֤�û�����ʧȥ������֤��
            {
           var regu = "^[0-9a-zA-Z]{4,16}$";
           var re = new RegExp(regu);
           if (!re.test(s))
           {
           document.getElementById ("userInf").innerHTML="�û�����ʽ���ԣ�";
           document.getElementById ("userInf").style.color="red";
          
           }
           else
           {
           document.getElementById ("userInf").innerHTML="�û���ͨ����";
           document.getElementById ("userInf").style.color="green";
            document.getElementById ("userIDCheck").innerHTML="";
           }
            }

   function validatorPassword(s)//��֤����Ϊ6��16���֡���ĸ���»�����ɣ�����ĸΪ��ĸ��������֤���롣
               {
                 regu="^[a-zA-Z][0-9a-zA-Z_]{5,15}$";
                 re=new RegExp(regu);
                if (!re.test(s))
                {
                   document.getElementById ("passwordInf").innerHTML="���ԣ�";
                   document.getElementById ("passwordInf").style.color="red";
                }
                else
                {
                  document.getElementById ("passwordInf").innerHTML="ͨ����";
                  document.getElementById ("passwordInf").style.color="green";
                  document.getElementById ("passwordCheck").innerHTML="";
                }
//               alert("6��16�����֡��»��ߺ�Ӣ���ַ�,��һ������Ϊ��ĸ,��������ĸ��Сд");
               }

 
    function passwordConfirm(s)//ȷ��������֤
           {
             if(s.toLowerCase()!=document.getElementById ("password").value.toLowerCase())
             {
                   document.getElementById ("confirmInf").innerHTML="���벻һ�£�";
                   document.getElementById ("confirmInf").style.color="red";
               
             }
             else
             {
                  document.getElementById ("confirmInf").innerHTML="ͨ����";
                  document.getElementById ("confirmInf").style.color="green";
                  document.getElementById ("confirmCheck").innerHTML="";
             }
//              alert("�����������벻һ��");
           }
    function displayInform(s)//ע����Ϣ������ʾ��Ϣ����ý�����֤��
    {
      if(s=="user")
      document.getElementById ("userIDCheck").innerHTML="(�û�����4-16�����ֻ���ĸ���)";
      if(s=="password")
      document.getElementById ("passwordCheck").innerHTML="(������6-16�����֡���ĸ���»�����ɣ�����ĸ��������ĸ,�����ִ�Сд)";
      if(s=="passwordC")
      document.getElementById ("confirmCheck").innerHTML="(���������������һ��)";
     
     
    }
function submitValidator() //�ύ��֤
   {
     if(document.getElementById("control").style.display=="inline")
     {
         if((document.getElementById ("user").value=="")||(document.getElementById("password").value=="")||(document.getElementById("passwordC").value=="")||(document.getElementById("answer").value=="")||(document.getElementById("question").value==""))
        {
           alert("�������Ϊ�գ�");
            return false;
         }
         else
        {
           if((document.getElementById ("user").value).match(/^[0-9a-zA-Z]{4,16}$/)&&(document.getElementById("password").value).match(/^[a-zA-Z][0-9a-zA-Z_]{5,15}$/)&&
           (document.getElementById ("password").value.toLowerCase()==document.getElementById ("passwordC").value.toLowerCase()))
           {return true;}
           else
           {alert("�����ʽ����");return false;}
         }
     }
     else
     {
        if((document.getElementById ("user").value=="")||(document.getElementById("password").value=="")||(document.getElementById("passwordC").value=="")||(document.getElementById("answer").value==""))
        {
           alert("�������Ϊ�գ�");
            return false;
         }
         else
        {
           if((document.getElementById ("user").value).match(/^[0-9a-zA-Z]{4,16}$/)&&(document.getElementById("password").value).match(/^[a-zA-Z][0-9a-zA-Z_]{5,15}$/)&&
           (document.getElementById ("password").value.toLowerCase()==document.getElementById ("passwordC").value.toLowerCase()))
           {return true;}
           else
           {alert("�����ʽ����");return false;}
         }
     }