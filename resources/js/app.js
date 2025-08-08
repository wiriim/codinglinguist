import 'bootstrap';
import './posts.js';
import './course.js';
import {loadQuestionPage} from './question.js';
import {loadProfilePage} from './profile.js';
import {loadPostsPage} from './posts.js';
import {loadLevelPage} from './level.js';
import {loadLeaderboardPage} from './leaderboard.js';
import {loadPostDetailPage} from './post-detail.js';

let questionPage = document.querySelector('#questionPage');
if (questionPage != null) loadQuestionPage();

let profilePage = document.querySelector('#profilePage');
if (profilePage != null) loadProfilePage();

let postsPage = document.querySelector('#postsPage');
if (postsPage != null) loadPostsPage();

let levelPage = document.querySelector('#levelPage');
if (levelPage != null) loadLevelPage();

let leaderboardPage = document.querySelector('#leaderboardPage');
if (leaderboardPage != null) loadLeaderboardPage();

let postDetailPage = document.querySelector('#postDetailPage');
if (postDetailPage != null) loadPostDetailPage();
