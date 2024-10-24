This is a fork of Jim Derry's [xExtension-RedditSub](https://github.com/balthisar/xExtension-RedditSub).

* Alpha version of fork
* Use at your own risk
* No maintenance commitment (specific proposed fixes could be considered)

Entry titles are prefixed by subreddit name `/r/something`. 

Non Reddit entries show the domain name of the link target (as shown here in red underline):

![image](https://github.com/user-attachments/assets/b6cf110c-d7e3-413c-91b0-542ecb55320b)

Used in combination with custom CSS code (see 'custom CSS' FreshRSS core extension):

```
.flux .flux_header .item.website .websiteName,
.flux .flux_header .item .title {
    font-size: 1.4em;
    padding: 3px 15px;
}
.tree-folder-title {
         font-size: 1em;
         line-height: 1.2rem;
 }
```

Tweak this css and the one at `static/style.css` (defines the style of the generated title prefix) as seen fit.

CAVEATS

When show site icon option is set the alignement is not good.

==============================================

Extension for FreshRSS (https://github.com/FreshRSS)

**v1.0**

Adds the Reddit Subreddit name to the title of the entry in a subdued manner.
