<?php

class CommentsDB
{
    private $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    public function getByPostId(int $postId)
    {
        $sql = 'SELECT * FROM blog.comments where post_id =' . $postId;
        $statement = $this->connection->prepare($sql);

        // izvrsavamo upit
        $statement->execute();

        // zelimo da se rezultat vrati kao asocijativni niz.
        // ukoliko izostavimo ovu liniju, vratice nam se obican, numerisan niz
        $statement->setFetchMode(PDO::FETCH_OBJ);

        $results = $statement->fetchAll();

        return $results;
    }
}
