class Node {
    constructor(data, next = null) {
        this.node = data;
        this.next = next;
    }
}


class LinkedList {
    constructor() {
            this.head = null;
            this.size = 0;
        }
        //insert the first node
    insert_the_first_node(data) {
            this.head = new Node(data, this.head);
            this.size++;
        }
        //insert at last
    insert_last(data) {
            let current;
            let newNode = new Node(data);
            if (!this.head) {
                this.head = newNode
            } else {
                current = this.head;
                while (current.next) {
                    current = current.next;
                }
                current.next = newNode;
            }
            this.size++;
        }
        //insert at last
    insert_at_index(data, index) {
            if (index < 0 && index > this.size) {
                return;
            }
            if (index === 0) {
                this.head = new Node(data, this.head);
                this.size++;
                return;
            }
            var prev, current;
            current = this.head;
            var count = 0;
            var newNode = new Node(data);
            while (count < index) {
                prev = current;
                count++;
                current = current.next;
            }
            newNode.next = current;
            prev.next = newNode;
            this.size++;
        }
        //get at index
    get_at_index(index) {
            if (index > this.size && index < 0) {
                return;
            }
            var count = 0;
            var current;
            current = this.head;
            while (current.next) {
                if (count == index) {
                    console.log(current.node);
                    return;
                }
                count++;
                current = current.next;
            }

        }
        // remove at index
    remove_at_index(index) {
            if (index < 0 && index > this.size) {
                return;
            }
            var count = 0;
            var current = this.head;
            var prev;
            while (current) {
                if (index == count) {
                    this.size--;
                    prev.next = current.next;
                    return;
                }
                count++;
                prev = current;
                current = current.next;
            }
        }
        //clear the list
    clear_list() {

        }
        //print the list
    print_data() {
        let current = this.head;
        while (current) {
            console.log(current.node);
            current = current.next;
        }
        console.log("ll size is:" + this.size);
    }
}
const adt = new LinkedList()
adt.insert_the_first_node(100);
adt.insert_the_first_node(200);
adt.insert_the_first_node(300)
adt.insert_last(400)
adt.insert_at_index(600, 0)
adt.insert_at_index(500, 3)
    // adt.get_at_index(1)
adt.remove_at_index(0);
adt.print_data();