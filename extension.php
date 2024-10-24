<?php
class RedditSubExtension extends Minz_Extension 
{
        public function init()
        {
        Minz_View::appendStyle($this->getFileUrl('style.css', 'css'));
                $this->registerHook('entry_before_display', array($this, 'renderEntry'));
        }
        
        
        protected function isRedditLink($entry)
        {
        return (bool) strpos($entry->link(), 'reddit.com');
    }
        
        
    protected function extractSubreddit($content)
    {
        $match_url = '#https://www.reddit.com/r/([^\/]*)#';

        if ( preg_match($match_url, $content, $matches) )  
        {
            return $matches[1];        
        }    
    }
    
    protected function extractDomain($content)
    {
        $match_url = '#https://([^\/]*)#';

        if ( preg_match($match_url, $content, $matches) )  
        {
            return $matches[1];        
        }    
    }
    
    
    public function renderEntry($entry) 
    {
        $text = 'default';

        if (false === $this->isRedditLink($entry)) 
        {
                $text = $this->extractDomain( $entry->link() );
        }
        else
        {
                $text = $this->extractSubreddit( $entry->link() );
        }


        $entry->_title( "<span class='subreddit_name'>$text</span> " . $entry->title() );
        return $entry;
    }
}
