using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace ID_alexprojects
{
    #region Ma_voorstellingen
    public class Ma_voorstellingen
    {
        #region Member Variables
        protected int _id;
        protected unknown _date;
        protected string _day;
        protected string _name;
        protected string _country;
        protected string _performance;
        protected unknown _start_hour;
        protected unknown _end_hour;
        protected int _min_duration;
        protected string _location;
        protected string _website;
        protected string _img;
        protected string _alt;
        protected string _type;
        #endregion
        #region Constructors
        public Ma_voorstellingen() { }
        public Ma_voorstellingen(unknown date, string day, string name, string country, string performance, unknown start_hour, unknown end_hour, int min_duration, string location, string website, string img, string alt, string type)
        {
            this._date=date;
            this._day=day;
            this._name=name;
            this._country=country;
            this._performance=performance;
            this._start_hour=start_hour;
            this._end_hour=end_hour;
            this._min_duration=min_duration;
            this._location=location;
            this._website=website;
            this._img=img;
            this._alt=alt;
            this._type=type;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual unknown Date
        {
            get {return _date;}
            set {_date=value;}
        }
        public virtual string Day
        {
            get {return _day;}
            set {_day=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Country
        {
            get {return _country;}
            set {_country=value;}
        }
        public virtual string Performance
        {
            get {return _performance;}
            set {_performance=value;}
        }
        public virtual unknown Start_hour
        {
            get {return _start_hour;}
            set {_start_hour=value;}
        }
        public virtual unknown End_hour
        {
            get {return _end_hour;}
            set {_end_hour=value;}
        }
        public virtual int Min_duration
        {
            get {return _min_duration;}
            set {_min_duration=value;}
        }
        public virtual string Location
        {
            get {return _location;}
            set {_location=value;}
        }
        public virtual string Website
        {
            get {return _website;}
            set {_website=value;}
        }
        public virtual string Img
        {
            get {return _img;}
            set {_img=value;}
        }
        public virtual string Alt
        {
            get {return _alt;}
            set {_alt=value;}
        }
        public virtual string Type
        {
            get {return _type;}
            set {_type=value;}
        }
        #endregion
    }
    #endregion
}