 <?php

    class ManageArticles extends DbConnect
    {
        public function getAllArticles()
        {
            $query = "SELECT * FROM articles ORDER BY date DESC";
            $result = $this->Connect()->prepare($query);
            $result->execute();
            $tab = [];
            while ($show = $result->fetch()) {
                $article = new Article($show);
                $tab[] = $article;
            }
            return $tab;
        }

        public function sendAllArticle(Article $article)
        {
            $article->setAuthor($_SESSION['login']);
            $query = "INSERT INTO articles(title, content, author, img) VALUES(:title, :content, :author, :img)";
            $result = $this->Connect()->prepare($query);
            $result->execute(["title" => htmlspecialchars($article->getTitle()), "content" => htmlspecialchars($article->getContent()), "author" => $article->getAuthor(), "img" => $article->getImg()]);
        }
        public function oneFullArticle($id)
        {
            $query = "SELECT * FROM articles WHERE id = :idArticle";
            $result = $this->Connect()->prepare($query);
            $result->execute(["idArticle" => $id]);
            if ($show = $result->fetch()) {
                $article = new Article($show);
                return $article;
            }
        }
    }
    ?> 