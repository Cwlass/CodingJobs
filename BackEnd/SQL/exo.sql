USE wf3_library;

-- SELECT * FROM subscriber;





/*SELECT * FROM book
INNER JOIN borrow
on book_id = book.id
WHERE end_date IS null*/


-- SELECT title FROM book WHERE id IN(SELECT book_id FROM borrow WHERE end_date IS NULL);
/*SELECT title FROM book WHERE id IN(
    SELECT book_id FROM borrow WHERE subscriber_id IN(
        SELECT id from subscriber WHERE name = 'Chloe'))*/

/*SELECT name FROM subscriber WHERE id IN(
    SELECT subscriber_id FROM borrow WHERE start_date = '2014-12-19'
)*/

SELECT name,start_date, end_date, title FROM borrow
JOIN subscriber on subscriber_id =subscriber.id
JOIN book on book.id =book_id
WHERE name = "Benoit"