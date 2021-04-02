import {Box} from "./box.js";
let matrix={};
function make_grid(rows,columns){
   let grid= document.createElement("div");
   let mainGrid= new Array();
   let result='';
   let index=0;
    for(let i=0;i<rows;i++){
        mainGrid[i]=new Array();
        for(let j=0;j<columns;j++){
            result+=`<div class="box"></div>`;
            let box= new Box(i,j,index);
            box.set_div(`<div class="box"></div>`);
            mainGrid[i].push(box);
            index++;
        }
        let rws=document.createElement("div");
        rws.classList.add("row");
        rws.innerHTML=result;
        grid.appendChild(rws);
        result="";
    }
    grid.classList.add("grid");
    let body=document.querySelector("body");
    body.appendChild(grid);
   return mainGrid;
}
 matrix= make_grid(6,6)
console.log(matrix)
// console.log(matrix[2][0])
function get_box(row_index, col_index)
{
  let output= (row_index in matrix && col_index in matrix[row_index]) ? matrix[row_index][col_index]: "out of bound";
    (output!=="out of bound") ? document.querySelectorAll(".box")[output.index].style.background="#002" : null;
}
// i want to traverse through all the the keys using the first depth search
//
get_box(2,3)
function same_diag(element1, element2, )
{
    // let two=matrix.find(item=>item.find(box=>box.index==element1));
    console.log( one)

}
same_diag(2,14)

function place(q,n)
{
    for(let i=0; i<n;i++){
        if(grid[q][n]===i){
            return "in the same diagonal"
        } else{ return " oops not in the same"}
    }
}
function backtrack(n)
{
    let k=1;
    if(place(k,n)){
    }

}



