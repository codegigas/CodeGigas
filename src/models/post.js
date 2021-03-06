"use strict";

const mongodb = require("mongodb");
const getDb = require("../database/mongodb.js").getDb;

const getOneById = async (id, callback) => {
  const db = await getDb();
  const _id = new mongodb.ObjectId(id);

  db.collection("posts").findOne({_id: _id}, (error, result) => {
    if (error) {
      callback(error, null);
    } else {
      callback(null, result);
    }
  });
}

const modifyOneById = async (id, content, callback) => {
  const db = await getDb();
  const _id = new mongodb.ObjectId(id);

  db.collection("posts").findOneAndUpdate({_id: _id}, {
    $set: {content: content}
  }, (error, result) => {
    if (error) {
      callback(error, null);
    } else {
      callback(null, result);
    }
  });
}

const createNew = async (data, callback) => {
  let docs = {
    content: data.content,
    topic_id: new mongodb.ObjectId(data.topic_id)
  }

  try {
    const db = await getDb();
    const collection = await db.collection("posts");
    const result = collection.insertOne(docs);
    return Promise.resolve(result);

  } catch (error) {
    return Promise.reject(errror);
  }
}

module.exports = {
  getOneById: getOneById,
  modifyOneById: modifyOneById,
  createNew: createNew
}