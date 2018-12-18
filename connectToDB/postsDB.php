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
}
