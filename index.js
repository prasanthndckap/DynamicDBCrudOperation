let addmore = document.querySelector("#addcolum");







let tablediv = document.querySelector(".tablediv");

 // adding datatypes in the  in the array
let datatypes = ['int','varchar(255)','timestamp','text','date'];


// when  clicking the  addmore button it will creating another text input for colum name
// and datatypes and assining the classlist type in the field

addmore.addEventListener("click",()=>{
let columdiv = document.createElement('div');
columdiv.classList = "coulmdiv"
    let inputs = document.createElement('input')
    inputs.type = "text";
    inputs.classList = "columnname";
    inputs.name = "ColumName[]";
    inputs.placeholder = "Enter ColumName";

    let selectinput = document.createElement('select')
    selectinput.id = "columtype";
    selectinput.name = "ColumType[]";



for(let i=0;i<datatypes.length;i++){
    let Option = document.createElement('option');
    Option.value = datatypes[i];
    Option.text = datatypes[i];
    selectinput.appendChild(Option);
} 

columdiv.appendChild(inputs);

columdiv.appendChild(selectinput);
tablediv.appendChild(columdiv)

})
