create table t_poblacions
(
    idgestion int,                      ## gestion
    codmunicip int,                     ## codigo del municipio
    genero VARCHAR(2),                  ## genero M o F
    `0`                 int,
    `1`                 int,
    `2`                 int,
    `3`                 int,
    `4`                 int,
    `5`                 int,
    `6`                 int,
    `7`                 int,
    `8`                 int,
    `9`                 int,
    `10`                int,
    `11`                int,
    `12`                int,
    `13`                int,
    `14`                int,
    `15`                int,
    `16`                int,
    `17`                int,
    `18`                int,
    `19`                int,
    `20`                int,
    `21`                int,
    `22`                int,
    `23`                int,
    `24`                int,
    `25`                int,
    `26`                int,
    `27`                int,
    `28`                int,
    `29`                int,
    `0_4`               int,
    `5_9`               int,
    `10_14`             int,
    `15_19`             int,
    `20_39`             int,
    `40_49`             int,
    `50_59`             int,
    `60mas`             int,
    `30_34`             int,
    `35_39`             int,
    `40_44`             int,
    `45_49`             int,
    `50_54`             int,
    `55_59`             int,
    `60_64`             int,
    `65_69`             int,
    `70_74`             int,
    `75_79`             int,
    `80mas`             int,
    `MEF`               int,
    `Embarazos`         int,
    `Aborto`            int,
    `Partos`            int,
    `Nacimientos`       int,
    `NacidosVivos`      int,
    `NacidosMuertos`    int,
    PRIMARY KEY (idgestion, codmunicip, genero)
);