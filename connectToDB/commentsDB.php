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

        $statement->execute();

        $statement->setFetchMode(PDO::FETCH_OBJ);

        $results = $statement->fetchAll();

        return $results;
    }

    public function insert(string $author, string $body, int $postId)
    {
        $sql = 'INSERT INTO comments (author, body, post_id) VALUES (\'' . $author . '\',\'' . $body . '\',' . $postId . ')';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
}
