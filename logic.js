function CheckMember(){
    var choose1 = document.getElementById('choose1');
    var choose2 = document.getElementById('choose2');
    var member_group = document.getElementById('member_group');

    if(choose1.checked == true){
        member_group.hidden = false;
    }
    else{
        member_group.hidden = true;
    }
}
function CheckOther(){
    var other = document.getElementById('other')
    var other1 = document.getElementById('other1')

    if(other.checked == true){
        other1.hidden = false;
    }
    else{
        other1.hidden = true;
    }
}
function restrictInput(event){
    var input = event.target;
    var value = input.value;
    input.value = value.replace(/\D/g, '');
}


function Type(select,label,red,input) {
    var checked = document.getElementById(select);
    var label = document.getElementById(label);
    var red = document.getElementById(red)
    var input = document.getElementById(input);

    if (checked.value == "ordinary") {
        label.hidden = false;
        red.hidden =false;
        input.hidden = false;

    }
    else {
        label.hidden = true;
        red.hidden = true;
        input.hidden = true;
        input.value = '';
    }
}