

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

    def printList(self):

        curr_node = self.head

        while curr_node != None:
            print(curr_node.data, end='->')

            curr_node = curr_node.next

        print('null')

if __name__ == '__main__':

    my_list1 = Linkedlist()

    my_list1.insert(Node(Banana))
    my_list1.insert(Node(Apple))
    my_list1.insert(Node(Grapes))
    my_list1.insert(Node(Strawberry))
    my_list1.insert(Node(Mango))
    my_list1.insert(Node(Guava))
    my_list1.insert(Node(Water_melon))
    my_list1.insert(Node(Orange))

    my_list1.printlist()






    
