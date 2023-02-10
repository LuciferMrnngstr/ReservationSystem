

class Node:

    def __init__(self, data):
        self.data = data
        self.next = None

class Linkedlist():

    def __init__(self):
        self.head = None

    def insert_After(self, new_node):

        if self.head:

            L_node = self.head
            while L_node.next != None:
                L_node = L_node.next

            L_node.next = new_node
        else:
            self.head = new_node

    def append(self,item):
        current = self.head
        if current:
            while current.getNext() != None:
                current = current.getNext()
            current.setNext(Node(item))
        else:
            self.head = Node(item)

    def printList(self):

        curr_node = self.head

        while curr_node != None:
            print(curr_node.data, end='->')

            curr_node = curr_node.next

        print('null')

if __name__ == '__main__':

    my_list1 = Linkedlist()
    
    my_list1.insert_After(Node(20))
    my_list1.insert_After(Node(50))
    my_list1.insert_After(Node(199))
    my_list1.append(Node(200))
    my_list1.append(Node(201))
   

    my_list1.printList()






    
