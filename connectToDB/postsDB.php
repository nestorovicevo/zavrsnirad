<?php

class PostsDB
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function allPosts()
    {
        // pripremamo upit
        $sql = 'SELECT * FROM blog.posts ORDER by created_at DESC;';
        $statement = $this->connection->prepare($sql);

        // izvrsavamo upit
        $statement->execute();

        // zelimo da se rezultat vrati kao asocijativni niz.
        // ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
        $statement->setFetchMode(PDO::FETCH_OBJ);

        // punimo promenjivu sa rezultatom upita

        return $statement->fetchAll();
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM blog.posts where id =' . $id;
        $statement = $this->connection->prepare($sql);

        // izvrsavamo upit
        $statement->execute();

        // zelimo da se rezultat vrati kao asocijativni niz.
        // ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
        $statement->setFetchMode(PDO::FETCH_OBJ);

        $results = $statement->fetchAll();

        return $results[0];
    }

    public function latest(int $limit = 5)
    {
        $sql = 'SELECT * FROM blog.posts ORDER BY created_at DESC LIMIT ' . $limit . ';';
        $statement = $this->connection->prepare($sql);
        // izvrsavamo upit
        $statement->execute();
        // zelimo da se rezultat vrati kao asocijativni niz.
        // ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
        // $statement->setFetchMode(PDO::FETCH_ASSOC);
        $statement->setFetchMode(PDO::FETCH_OBJ);
        // vracamo rezultat upita, ako prosledimo gore PDO::FETCH_OBJ dobicemo rezultat kao niz objekata, a to nam treba
        return $statement->fetchAll();
    }

    public function create(string $title, string $body, string $author, datetime $createdAt)
    {
        $sql = 'INSERT INTO posts (author, body) VALUES (\'' . $title . '\',\'' . $body . '\',' . $author . '\',\'' . $createdAt . ')';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
}
