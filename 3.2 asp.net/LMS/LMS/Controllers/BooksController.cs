using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using LMS.Models;
using System.Data.Entity;
using System.Net;
using System.Web.UI.WebControls;

namespace LMS.Controllers
{
    public class BooksController : Controller
    {

        private LMSEntities db = new LMSEntities();
        
        // GET: Books
        public ActionResult Index()
        {
            return View();
        }
        [HttpGet]
        public ActionResult Add() {
            if (Session["ID"] != null)
            {
                return View();
            }
            else
                return RedirectToAction("Login","Users");
        }
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Add( Book2 book,HttpPostedFileBase image1)
        {
            Book2 b = new Book2();
            b.Book_title = book.Book_title;
            b.Book_arthor = book.Book_arthor;
            b.Book_image = book.Book_image;
            if (image1 != null)
            {
                b.Book_image = new byte[image1.ContentLength];
                image1.InputStream.Read(book.Book_image, 0, image1.ContentLength);
            }

                b.Book_isbn = book.Book_isbn;
                b.Quantity = book.Quantity;
            

            db.Book2.Add(b); 
            db.SaveChanges();
            return RedirectToAction("List");
            

            
        }
        [HttpGet]
        public ActionResult List()
        {
            if (Session["ID"] != null)
            {
                return View(db.Book2.ToList());
            }

            else
               return RedirectToAction("Login", "Users");
           
        }

        public ActionResult EditBOOKS(int? id) {

            if (id==null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Book2 user = db.Book2.Find(id);
            if (user == null)
            {
                return HttpNotFound();
            }
            return View(user);
        }

        [HttpPost]

        public ActionResult EditBOOKS([Bind(Include = "Bid,Book_title,Book_arthor,Book_image,Book_isbn,Quantity")]Book2 book)
        {

            if (ModelState.IsValid)
            {
                db.Entry(book).State = EntityState.Modified;
                db.SaveChanges();
               // return RedirectToAction("Index");
            }
            return View(book);
        }
    }
}