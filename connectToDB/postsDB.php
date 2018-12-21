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
        $sql = 'SELECT * FROM blog.posts ORDER by created_at DESC;';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_OBJ);

        return $statement->fetchAll();
    }

    public function getById(int $id)
    {
        $sql = 'SELECT * FROM blog.posts where id =' . $id;
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_OBJ);
        $results = $statement->fetchAll();

        return $results[0];
    }

    public function latest(int $limit = 5)
    {
        $sql = 'SELECT * FROM blog.posts ORDER BY created_at DESC LIMIT ' . $limit . ';';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $statement->setFetchMode(PDO::FETCH_OBJ);

        return $statement->fetchAll();
    }

    public function create(string $title, string $body, string $author, string $createdAt)
    {
        $sql = 'INSERT INTO posts (title, body, author, created_at) VALUES (\'' . $title . '\',\'' . $body . '\',\'' . $author . '\',\'' . $createdAt . '\');';
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }

    public function delete(int $id)
    {
        $sql = 'DELETE FROM posts WHERE id=' . $id;
        $statement = $this->connection->prepare($sql);
        $statement->execute();
    }
}
