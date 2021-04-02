export class Queue
{
    constructor(size)
    {
        this.stack=[];
        this.top=0;
        this.size=size;
    }
    is_full()
    {
        if(this.top===this.size){
            throw new Error("the stack is full")
        }

    }
    is_empty()
    {
        if(this.top<1){
            throw new Error("the stack is empty")
        }
    }

    pop(data)
    {
        if(!this.is_empty()){
            this.stack.filter(item=>item[this.top]);
        }

    }
    push(data)
    {
        this.top++;
        this.stack[this.top]=data;
    }



}