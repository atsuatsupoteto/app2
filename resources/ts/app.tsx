import React from "react";
import { createRoot } from "react-dom/client";
import { BrowserRouter, Routes, Route, Link } from "react-router-dom";

import { TopPage } from "./pages/TopPage";
import { UserDetail } from "./pages/UserDetail";
import { PostPage } from "./pages/PostPage";
import { PostDetail } from "./pages/PostDetail";
import { PostEdit } from "./pages/PostEdit";

const App = () => {
    const title: string = "Hello TypeScript React";
    return (
        <div id="main">
            <BrowserRouter>
                <Routes>
                    <Route path="/" element={<TopPage />} />
                    <Route path="/user/detail" element={<UserDetail />} />
                    <Route path="/posts" element={<PostPage />} />
                    <Route path="/posts/detail" element={<PostDetail />} />
                    <Route path="/posts/edit" element={<PostEdit />} />
                </Routes>
                <ul>
                    <li>
                        <Link to="/">Top</Link>
                    </li>
                    <li>
                        <Link to="/user/detail">UserDetail</Link>
                    </li>
                    <li>
                        <Link to="/posts">Post</Link>
                    </li>
                    <li>
                        <Link to="/posts/detail">PostDetail</Link>
                    </li>
                    <li>
                        <Link to="/posts/edit">PostEdit</Link>
                    </li>
                </ul>
            </BrowserRouter>
        </div>
    );
};

const container = document.getElementById("app") as HTMLInputElement;
const root = createRoot(container);
root.render(<App />);