## = PROJETO ESCOLA(SistemaISP) =
<div align="center">
</div>

## == DESCRIÇÃO ==
Sistema de Gerenciamento de Alunos e Cursos
Este projeto é uma aplicação simples desenvolvida em PHP com integração ao banco de dados MySQL. Ele permite gerenciar alunos, cursos e matrículas, ilustrando um exemplo prático de relacionamento entre tabelas no banco de dados.

## == FUNÇÕES ==
-Gerenciamento de Alunos
Adicionar novos alunos.
Visualizar uma lista de alunos cadastrados.
Editar ou remover informações de alunos.

-Gerenciamento de Cursos
Adicionar novos cursos.
Listar todos os cursos disponíveis.
Editar ou excluir cursos.

-Gerenciamento de Matrículas
Matricular alunos em cursos específicos.
Visualizar todos os alunos matriculados em um curso.
Deletar matriculas de alunos.

## == TECNOLOGIAS UTILIZADAS ==
- PHP: linguagem de progamação utilizada no sistema.
- MySQL: Banco de dados utilizado para armazenar os dados das tabelas alunos, cursos e matriculas.
- Bootstrap: Framework CSS utilizado para estilização da aplicação.
- Google Charts: Biblioteca JavaScript utilizada para criação dos gráficos interativos a partir do dados das tabelas do banco de dados.

## == MODELAGEM DE DADOS ==
1. **Modelo Conceitual**: Definer as entidades e relacionamentos(disponível na pasta modelagem de dados);
   ![ModeloConceitual](https://github.com/user-attachments/assets/ce458e2a-2a67-4da4-b0cc-b1721df2054d)
2. **Modelo Lógico**: Detalhamento das tabelas envolvidas, campos e relacionamentos;
   ![ModeloLogico](https://github.com/user-attachments/assets/3a34c673-00a7-4e61-b8bb-5eb927fd905d)
3. **Modelo Físico**: Criação concreta do banco de dados no MySQL, com a implementação das tabelas e índices a fim de melhorar o desempenhos nas consultas.
== CONSULTAS SQL UTILIZADAS ==
```SQL
  SELECT * FROM aluno
```
```SQL
  INSERT INTO matricula (id_aluno, id_curso, data_matricula, numero_matricula) VALUES ($aluno, $curso, $data, $numero)
```

```SQL
  UPDATE aluno SET nome_aluno = '$nome_aluno',
                   idade = '$idade',
                   cpf = '$cpf',
                   escolaridade = '$escolaridade' 
                   WHERE id_aluno = $id_aluno
```

```SQL
UPDATE curso SET nome_curso = '$nome_curso',
                 descricao = '$descricao',
                 carga_horaria = '$carga_horaria',
                 area = '$area'
                 WHERE id_curso = $id_curso
```

```SQL
INSERT INTO curso (nome_curso, descricao, carga_horaria, area) VALUES ('$nome_curso', '$descricao', '$carga_horaria','$area')
```

```SQL
INSERT INTO aluno (nome_aluno, idade,  cpf, escolaridade) VALUES('$nome_aluno', $idade, $cpf, '$escolaridade')
```

```SQL
SELECT curso.nome_curso, COUNT(matricula.id_matricula) AS total_matriculas
                                     FROM curso
                                     JOIN matricula ON curso.id_curso = matricula.id_curso
                                     GROUP BY curso.nome_curso
```

```SQL
DELETE FROM curso WHERE id_curso = $id_curso
```

```SQL
DELETE FROM aluno WHERE id_aluno = $id_aluno
```

```SQL
DELETE FROM matricula WHERE id_matricula = $id_matricula
```

## == IMAGENS DO SISTEMA ==
<h4>Tela Inicial</h4>

![telainicial](https://github.com/user-attachments/assets/7df249dc-e3d0-4d94-8915-3d2acd8a054f)
<h4>Cadastro Aluno</h4>

![cadaluno](https://github.com/user-attachments/assets/c774efa0-d63a-4709-835e-0a2796edc5c4)
<h4>Tabela Aluno</h4>

![tabaluno](https://github.com/user-attachments/assets/dd6f0ce2-1939-440b-abf1-d1235f847aed)
<h4>Cadastro de Curso</h4>

![cadcurso](https://github.com/user-attachments/assets/098620c3-a269-40f6-8572-498a42851a35)
<h4>Tabela Cursos</h4>

![tabcurso](https://github.com/user-attachments/assets/e3205ba7-09e9-49d5-a823-a148963c01dc)
<h4>Cadastro de Matrícula</h4>

![cadmatricula](https://github.com/user-attachments/assets/781e6e5d-673c-4e34-96c7-3d91ea7b3c6e)
<h4>Tabela e Gráfico Matrículas</h4>

![tab_grafMatricula](https://github.com/user-attachments/assets/a2a333c0-96a5-4506-a047-adf071988387)



