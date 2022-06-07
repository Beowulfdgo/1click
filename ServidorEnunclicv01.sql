--
-- PostgreSQL database cluster dump
--

-- Started on 2022-06-07 16:01:21

SET default_transaction_read_only = off;

SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;

--
-- Roles
--

CREATE ROLE postgres;
ALTER ROLE postgres WITH SUPERUSER INHERIT CREATEROLE CREATEDB LOGIN REPLICATION BYPASSRLS PASSWORD 'SCRAM-SHA-256$4096:uRI6SxF9tRfxwpTnS5+2QA==$zuYMCGzJoNJyIUKKy/BKa4rkLvxoKq/+9d10rjhTm3U=:Tx3gBoKANCQG/p4ZxO+bZFypC9H6cujUTz16Hj4b/g4=';






-- Completed on 2022-06-07 16:01:21

--
-- PostgreSQL database cluster dump complete
--

