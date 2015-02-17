<?php

namespace MyBooks\DAO;

use MyBooks\Domain\Author;

class AuthorDAO extends DAO {

    /**
     * Returns a user matching the supplied id.
     *
     * @param integer $id The user id.
     *
     * @return \MyBooks\Domain\User|throws an exception if no matching user is found
     */
    public function find($id) {
        $sql = "select * from author where auth_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($id));

        if ($row) {
            return $this->buildDomainObject($row);
        } else {
            throw new \Exception("No user matching id " . $id);
        }
    }

    /**
     * Creates a User object based on a DB row.
     *
     * @param array $row The DB row containing Author data.
     * @return \MyBooks\Domain\Author
     */
    protected function buildDomainObject($row) {
        $author = new Author();
        $author->setId($row['auth_id']);
        $author->setFirstname($row['auth_first_name']);
        $author->setLastname($row['auth_last_name']);
        $author->setName($row['auth_first_name'] . " " . $row['auth_last_name']);
        return $author;
    }

}
