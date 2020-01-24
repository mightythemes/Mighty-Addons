import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import App from './src/components/app.jsx';
import Gallery from './src/components/Gallery.jsx';

class MightyThemesLibraryClass{
    constructor() {
        this.initiatedLibrary = false;
        this.initiatedLibrary = false;
    }
    callback(mutationsList, observer) {
        var _libraryExists = document.getElementById('mighty-library');
        if( _libraryExists !== null && !this.initiatedLibrary) {
            this.initiatedLibrary = true;
            ReactDOM.render(<App /> , document.getElementById('mighty-library'));
        } else {
            this.initiatedLibrary = false;
        }

        var _galleryExists = document.getElementById('mighty-extension-pixabay');
        if( _galleryExists !== null && !this.initiatedLibrary) {
            this.initiatedLibrary = true;
            ReactDOM.render(<Gallery /> , document.getElementById('mighty-extension-pixabay'));
        } else {
            this.initiatedLibrary = false;
        }
    };
    init() {
        const observer = new MutationObserver(this.callback);
        observer.observe(document, { attributes: true, childList: true, subtree: true });
    };
};

var MightyThemesLibrary = new MightyThemesLibraryClass();
MightyThemesLibrary.init();