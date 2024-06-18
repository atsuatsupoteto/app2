import { Avatar, Card, CardContent, CardHeader, List, ListItemAvatar } from "@mui/material";
import React from "react";
import PostDetail from "./PostDetail";

function Post() {
    return (
        <Card>
            <CardHeader
                avatar={<Avatar alt="Remy Sharp" src="/static/images/avatar/1.jpg" />}
                title="○月○日×時 個サル募集！" />
            <CardContent>
                <List>
                    {[0, 1, 2,].map((value) => {
                        return <PostDetail id={value} />;
                    })}
                </List>
            </CardContent>
        </Card>
    );
}

export default Post;