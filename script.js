let countadd4 = 1,countadd = 0

function addq(){
    countadd4  = countadd4 + parseInt(document.getElementById('addinputq').value)

    // alert(countadd4)
    // alert(countadd4)
    // alert(countadd4);
    let content = "";
    let addcontent = `
    <div class="content" id="">
            <div class="question">
                <div style="margin: 0 10px;">
                    <input type="text" name="questionname[]" id="" value="" placeholder="ชื่อคำถาม" style="width: 100%;" required>
                </div>
                <div class="c-1" >
                    <div class="radio">
                        <P>1</P>
                    </div>
                    <input type="text" value="" name="c-1[]" placeholder="คำถามที่ 1" width="90%" required>
                </div>
                <div class="c-2">
                    <div class="radio">
                    <P>2</P>
                    </div>
                    <input type="text" value="" name="c-2[]" placeholder="คำถามที่ 2" required>
                </div>
                <div class="c-3">
                    <div class="radio">
                    <P>3</P>
                    </div>
                    <input type="text" value="" name="c-3[]" placeholder="คำถามที่ 3" required>
                </div>
                <div class="c-4">
                    <div class="radio">
                    <P>4</P>
                    </div>
                    <input type="text" value="" name="c-4[]" placeholder="คำถามที่ 4" required>
                </div>
            </div>
            <div class="answer">
                <input type="text" value="" name="answer[]" placeholder="คำตอบ" required>
            </div>
        </div>
    `
    for (let index = 0; index < countadd4; index++) {
        content = content + addcontent
    }
    document.getElementById('allquestion').innerHTML = content;
    document.getElementById('id01').style.display='none'
}


function remove() {
    if(countadd4>1)
         countadd4  = countadd4 - parseInt(document.getElementById('addinputq').value)
    
    let content = "";
    let addcontent = `
    <div class="content" id="">
            <div class="question">
                <div style="margin: 0 10px;">
                    <input type="text" name="questionname[]" id="" value="" placeholder="ชื่อคำถาม" style="width: 100%;" required>
                </div>
                <div class="c-1" >
                    <div class="radio">
                        <P>1</P>
                    </div>
                    <input type="text" value="" name="c-1[]" placeholder="คำถามที่ 1" width="90%" required>
                </div>
                <div class="c-2">
                    <div class="radio">
                    <P>2</P>
                    </div>
                    <input type="text" value="" name="c-2[]" placeholder="คำถามที่ 2" required>
                </div>
                <div class="c-3">
                    <div class="radio">
                    <P>3</P>
                    </div>
                    <input type="text" value="" name="c-3[]" placeholder="คำถามที่ 3" required>
                </div>
                <div class="c-4">
                    <div class="radio">
                    <P>4</P>
                    </div>
                    <input type="text" value="" name="c-4[]" placeholder="คำถามที่ 4" required>
                </div>
            </div>
            <div class="answer">
                <input type="text" value="" name="answer[]" placeholder="คำตอบ" required>
            </div>
        </div>
    `
    for (let index = 0; index < countadd4; index++) {
        content = content + addcontent
    }
    document.getElementById('allquestion').innerHTML = content;
    document.getElementById('id02').style.display='none'
}

var modal1 = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}



var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

var modal3 = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal3) {
        modal3  .style.display = "none";
    }
}

function test() {
    alert('test')
}

// select
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);