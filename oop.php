<?php 

// Define the Book class
class Book{
    // define private properties
    private $title;
    private $availableCopies;

    // define constructor method
    public function __construct($title, $availableCopies){
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // define method to get title
    public function getTitle()
    {
        return $this->title;
    }

    // define method to get available copies
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }

    // define method to borrow a book
    public function borrowBook()
    {
        if($this->availableCopies > 0){
            $this->availableCopies--;
            return true;
        }else{
            return false;
        }
    }

    // define method to return a book
    public function returnBook()
    {
        $this->availableCopies++;
    }
}


// Define the Member class 
class Member{
    // define properties
    private $name;

    // define constructor method
    public function __construct($name){
        $this->name = $name;
    }

    // define method to get name
    public function getName()
    {
        return $this->name;
    }

    // define method to borrow a book
    public function borrowBook(Book $book)
    {
       return $book->borrowBook();
    }

    // define method to return a book
    public function returnBook(Book $book)
    {
        $book->returnBook();
        echo "{$this->name} returned: {$book->getTitle()}\n";
    }
}

// Create a new book
$book1 = new Book("The Greatest Book", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create a new member
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Member borrowing books 
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";
