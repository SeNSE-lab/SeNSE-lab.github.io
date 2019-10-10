To generate the HTML for the publications page:

Preparation (stuff you only have to do once):
- Download the newest version of JabRef (must be at LEAST v2.7.2) from here
  http://jabref.sourceforge.net (I prefer the .jar file)
- Open the pubs/lab_pubs.bib file in JabRef and see how things work
- Install the custom export layout found in this directory
  - Click Options -> Manage Custom Exports
  - Click Add New and call it labweb. Browse for the labweb.layout file
  - Set the file extension to html
- Set the default sort order on export to be the same as the sort order of
  the current display.
  - Click Options -> Preferences
  - Click the File tab
  - Click "Export in current table sort order"

Adding a paper to the library:
- Find the paper to add on Web of Science
- Save the reference in Bibtex format
  - Lately, Web of Science's Bibtex export has been broken
  - Open the .bib file in a text editor and look for "Web of Science-Category" 
    near the end
  - You need to change it to "Web-of-Science-Category" (i.e., add hyphens)
    or JabRef will choke on it
- Open the pubs/lab_pubs.bib library in this directory in JabRef
- Import the new reference into that library
- Open the new reference and right-click in the Title box. Change the case
  to "Upper first"
- Right-click the Journal box and change case to "Upper Each First" then
  put articles & prepositions in all lower case (the, a, an, in, of, etc.)
- Fix the bibtexkey if necessary
- Put the PDF in the pubs/pdf directory. Add a link to it in JabRef and copy
  the filename ONLY (not the full path) to the comment field as well.
- Save the library

Exporting the library as HTML:

METHOD 1: JabRef Sort & Export (use this until it doesn't work anymore)
==============================
- Sort the entries in descending order by year (i.e., 2012 at the top)
  in the JabRef display
- Export a new html listing by clicking File -> Export. Give it
  a name, and select labweb as the file type.
- Open the new html file in a plaintext editor, remove the first pair
  of ul tags (<ul> and </ul>)
- Save the file as pubs.php

METHOD 2: Scripted Sorting (ignore this unless method 1 is broken)
==========================
JabRef's export filters are nice, but a bit inflexible. If the current scheme
is no longer working, it can be done this way.

- Remove the begingroup - endgroup part of the layout file. That part only
  prints when the year changes from one entry to the next.
- Remove the content of the begin.layout and end.layout files.
- Export the listing (does not need to be sorted) and use the labweb filter
- Run sortRefs.py on that file to sort it by year and add tags. Save it as	
  pubs.php. This can all be done by running
  "./sortRefs.py test.html > pubs.php"
- If more sophisticated things need to be done to the entries, it can be done
  easier in Python than in the JabRef export filter.
