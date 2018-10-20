@Injectible()
export class BookService {
    constructor {private _http: HttpClient)
        {}
    getBooks():
    Observable<IBook[]> {
        return this._http.get
            <IBook[]> ('getBooks.php');
    }
    }
}