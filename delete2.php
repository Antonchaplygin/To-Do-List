<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>

    <div id="main_block" class="header">
      <h2>My To Do List</h2>
      <input type="text" id="input" placeholder="Title...">
      <span onclick="AddElement()" class="btn">Add</span>
    </div>

    <ul id="main_ul">
  <li>A walk with my dog</li>
  <li>To find a job</li>
  <li>Training at 6pm</li>
    </ul>

<script type="text/javascript">
   // Создать кнопку закрытия, то есть поместить класс close в элменет li
   var li = document.getElementsByTagName("LI");
   var i;
   for(i = 0; i < li.length; i++) {
     var span = document.createElement("SPAN");
     var txt = document.createTextNode("\u00d7");
     span.className = 'close';

     span.appendChild(txt);
     li[i].appendChild(span);
     //myNodelist[i].appendChild(span);
   }

   // Присвоить кнопке функцию удаления пункта

   var close = document.getElementsByClassName('close');
   var i;
   for(i = 0; i < close.length; i++) {
     close[i].onclick = function() {
       var div = this.parentElement;
       div.style.display = "none";
     }
   }
   /* Зачёркнутая сторока
     Взять первый элемент со значением ul и при первом появлении li присвоить li событие */
     var  ul = document.querySelector("ul");
      ul.addEventListener('click', function(ev) {
        if(ev.target.tagName = 'li') {
          ev.target.classList.toggle('checked'); }
      }, false);




     // Функция добавления пункта
   function AddElement() {
     var li = document.createElement("li");
     var input = document.getElementById('input').value;
     var t = document.createTextNode(input);

     li.appendChild(t);
     if(input === '') {
       alert("You should write something");
     }else {
       document.getElementById("main_ul").appendChild(li);
     }
     document.getElementById("input").value = "";

     //теперь просто добавить кнопку закрытия как в первой части и функцию закртия как во второй
     var span = document.createElement("SPAN");
      var txt = document.createTextNode("\u00d7");
      span.className = "close";
      span.appendChild(txt);

      li.appendChild(span);

      for (i = 0; i < close.length; i++) {
    close[i].onclick = function() {
      var div = this.parentElement;
      div.style.display = "none";
    }
  }
   }
</script>

  </body>
</html>
