import { Grid } from "@mui/material";
import React from "react";
import Post from "../components/TopPage/Post";

export const TopPage = () => {
    return (
        <div>
            <div>TopPage</div>
            <Grid container spacing={2}>
                <Grid item xs={8}>
                    <Post />
                </Grid>
            </Grid>
        </div>
    );
};