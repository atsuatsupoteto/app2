//APIを利用してpostListを取得するhook

import axios from "axios";
import { useQuery, useQueryClient } from "react-query";

//**memo**
//asyncは非同期処理をするため
//メソッドを実行した際、javascriptはすぐreturnを返すが、
//API呼び出しをするときはサーバ間で通信をするためすぐに応答がこない。
//asyncはサーバとの通信がどういう状態かというのを保持したオブジェクトを返してくれる。
//awaitはasyncで保持している状態をみて処理が終わるまで待つという役割

//postListを取得するメソッド
const getPostList = async () => {
    const { data } = await axios.get("/api/posts");
    return data;
};

//APIを呼び出すものを使うメソッド
const useGetPostList = () => {
    const queryClient = useQueryClient();
    return useQuery("postList", getPostList, {
        //エラーが起こった場合はnullを格納
        onError: () => {
            queryClient.setQueryData("postList", null);
        },
    });
};

export default useGetPostList;
