utilities
=========

A collection of small utilities which I find handy in my everyday life.

Currently it includes:

* `heslovatko`

 This really simple Bash script is bending [Vim](http://www.vim.org/) and
[GnuPG](http://www.gnupg.org/) to work together seamlessly. It could be
considered as a lightweight alternative to Vim's
[gnupg.vim](http://www.vim.org/scripts/script.php?script_id=3645) plugin. Main
advantage of this script is that due its simplicity everyone can easily verify
that it doesn't do anything nasty.

 Script provides an on-the-fly file encryption in a very transparent way and
without usage of any temporary files. Just pass some `encrypted.asc` file as
script's parameter, do your editing stuff and write it back via Vim's `:wq`
command. Before that don't forget to edit the script and set there a proper
recipient id corresponding to your public key which you have previously added
to your public key ring.
