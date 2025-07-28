import 'bootstrap';
import './posts.js';
import './course.js';
import {loadQuestionPage} from './question.js';
import {loadProfilePage} from './profile.js';

let questionPage = document.querySelector('#questionPage');
if (questionPage != null) loadQuestionPage();

let profilePage = document.querySelector('#profilePage');
if (profilePage != null) loadProfilePage();
